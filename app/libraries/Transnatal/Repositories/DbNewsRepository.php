<?php
namespace Transnatal\Repositories;

use Transnatal\Interfaces\NewsRepositoryInterface;
use News;
use User;
use Auth;
use DB;
use Session;

class DbNewsRepository implements NewsRepositoryInterface {

	public function find($id)
	{
		$news = News::findOrFail($id);
		$news->news_date = format_date($news->news_date);
		return $news;
	}

	public function get_first()
	{
		$news = News::first();
		$news->news_date = format_date($news->news_date);
		return $news;
	}

	public function all()
	{
		$news = $this->convert_data_from_list(News::orderBy('news_date', 'DESC')->get());
		return $news;
	}

	public function allAvaliable()
	{
		$news = $this->convert_data_from_list(News::with('User')->where('news_date', '>=', date("Y-m-d"))->orderBy('news_date')->get());
		return $news;
	}

	public function queryAllAvaiable()
	{
		$db_news = DB::select(DB::raw('select * from news where news_date >= :date order by news_date asc'), ['date' => date("Y-m-d")]);
	
		$news = $this->convert_data_from_list($db_news);
		return $news;
	}

	public function all_unread_by_session_user()
	{
		$db_news = DB::select('SELECT n.* FROM news n join news_users nu on n.id = nu.news_id 
			join employees e on e.id = nu.employee_id where nu.employee_id = :emp_id and nu.flag_read = false', ['emp_id' => Auth::user()->employee->id]);
		$news = $this->convert_data_from_list($db_news);
		
		return $news;
	}

	public function save($input)
	{
		$news = new News();
		$news->news_date = format_date($input['news_date'], true);
        $news->news_message = $input['news_message'];
        $news->user_id = Auth::user()->id;

		$news->save();

		$users = User::all();

		$news_users_query = "INSERT INTO news_users (news_id, employee_id, flag_read) values ";
		foreach ($users as $key => $value) {
			$each_news_users = '(' . $news->id . ', ' . $value->employee->id . ', 0), ';
			$news_users_query .= $each_news_users;
		}
		$news_users_query = substr($news_users_query, 0, -2);
		
		DB::insert($news_users_query);

		Session::put('notify_news', true);

		return $news;
	}

	public function update($id, $input)
	{
		$bd_news = $this->find($id);

		$bd_news->news_date = format_date($input['news_date'], true);
        $bd_news->news_message = $input['news_message'];
        $bd_news->user_id = Auth::user()->id;

		$bd_news->save();

		return $bd_news;
	}

	public function delete($id)
	{
		DB::table('news_users')->where('news_id', $id)->delete();
		News::destroy($id);
	}

	public function newsViewed()
	{
		DB::table('news_users')->where('employee_id', Auth::user()->employee->id)->update(['flag_read' => 1]);
	}

	private function convert_data_from_list($news)
	{
		foreach ($news as $key => $new) {
			$new->news_date = format_date($new->news_date);
		}
		return $news;
	}
}