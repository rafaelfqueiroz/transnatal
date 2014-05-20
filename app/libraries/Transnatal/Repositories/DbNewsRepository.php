<?php
namespace Transnatal\Repositories;

use Transnatal\Interfaces\NewsRepositoryInterface;
use News;
use Auth;

class DbNewsRepository implements NewsRepositoryInterface {

	public function find($id)
	{
		return News::findOrFail($id);
	}

	public function get_first()
	{
		return News::first();
	}

	public function all()
	{
		return News::orderBy('news_date', 'DESC')->get();
	}

	public function allAvaliable()
	{
		return News::where('news_date', '>=', date("Y-m-d"))->orderBy('news_date')->get();
	}

	public function save($input)
	{
		$news = new News();
		$news->news_date = $input['news_date'];
        $news->news_message = $input['news_message'];
        $news->user_id = Auth::user()->id;

		$news->save();

		return $news;
	}

	public function update($id, $input)
	{
		$bd_news = $this->find($id);

		$bd_news->news_date = $input['news_date'];
        $bd_news->news_message = $input['news_message'];
        $bd_news->user_id = Auth::user()->id;

		$bd_news->save();

		return $bd_news;
	}

	public function delete($id)
	{
		News::destroy($id);
	}
}