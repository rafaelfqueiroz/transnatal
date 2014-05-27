<?php
namespace Transnatal\Repositories;

use Transnatal\Interfaces\NewsRepositoryInterface;
use News;
use Auth;

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
		$news = $this->convert_data_from_list(News::where('news_date', '>=', date("Y-m-d"))->orderBy('news_date')->get());
		return $news;
	}

	public function save($input)
	{
		$news = new News();
		$news->news_date = format_date($input['news_date'], true);
        $news->news_message = $input['news_message'];
        $news->user_id = Auth::user()->id;

		$news->save();

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
		News::destroy($id);
	}

	private function convert_data_from_list($news)
	{
		foreach ($news as $key => $new) {
			$new->news_date = format_date($new->news_date);
		}
		return $news;
	}
}