<?php

class Model_Paperadministration_Papersearch extends Model
{

	public static function find_paper($query)
	{
		//クエリビルダ
		$papers = DB::select()->from('paper')->order_by($query['order'], 'desc');

		if($query['limit']){
			$papers = $papers->limit($query['limit']);
		}
		if($query['column']){
			$papers = $papers->where($query['column'],$query['value']);
		}
		if($query['column2']){
			$papers = $papers->and_where($query['column2'],'like',$query['value2']);
		}

		$papers = $papers->distinct(true)->execute();
		//検索してきた論文をController（PaperAdministration/papersearch）に渡す
		$data['papers'] = $papers;
		return $data['papers'];
	}

	//すべてのカラムから$textを検索する
	public static function find_all($query)
	{
		//クエリビルダの作成
		$papers = DB::select()->from('paper')->order_by($query['order'], 'desc');

		if($query['limit']){
			$papers = $papers->limit($query['limit']);
		}
		if($query['column']){
			$papers = $papers->where($query['column'],$query['value']);
		}

		$papers = $papers->and_where_open();
		$papers = $papers->or_where('title','like',$query['value2']);
		$papers = $papers->or_where('author','like',$query['value2']);
		$papers = $papers->or_where('keyword','like',$query['value2']);
		$papers = $papers->or_where('category','like',$query['value2']);
		//$papers = $papers->or_where('journal','like',$query['value2']);
		$papers = $papers->and_where_close();

		$papers = $papers->distinct(true)->execute();
		//検索してきた論文をController（PaperAdministration/papersearch）に渡す
		$data['papers'] = $papers;
		return $data['papers'];
	}

	public static function make_layout($content)
	{
		
	}
}