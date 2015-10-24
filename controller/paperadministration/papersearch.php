<?php

class Controller_Paperadministration_Papersearch extends Controller
{

	public function before(){

        //認証チェックなどの処理をここに記述する

    }
    /*
	$query = [
				'limit' => '取得する論文の件数',
				'order' => '並び順',
				'column_list' => '項目＝＞値',
				'column' => '項目',
				'value' => '値',
				'column2' => '',
				'value2' => '',
			];
	*/

	//TOPページに最新５件を表示する
	public function action_index(){
		//検索条件の生成
		$query = [
					'limit' => 5,
					'order' => 'id',
					'column' => '',
					'value' => '',
					'column2' => '',
					'value2' => '',
				];

		//生成した検索条件をModel(paperadministration/papsersearch/papersearch)に渡す
		$contents['papers'] = Model_Paperadministration_Papersearch::find_paper($query);
		//検索してきた論文たちをViewのコンテンツ部分(paperadministration/parts/newpaper)に渡す
		$data['content'] = View::forge('paperadministration/parts/newpaper', $contents);
		//Viewオブジェクトを返す
		return View::forge('paperadministration/index', $data);
	}

	//メニューリストのいずれかがクリックされた時の処理
	public function action_genresearch(){
		//main.jsから投げられたpostdataを取得
		$pagetitle = Input::post('pagetitle');
		//検索条件の生成 pagetitleでif文
		$query = [
					'limit' => '',
					'order' => 'year',
					'column' => 'genre',
					'value' => $pagetitle,
					'column2' => '',
					'value2' => '',
				];

		if($pagetitle=='all'){
			$query['column'] = '';
			$query['value'] = '';
		}

		//生成した検索条件をModel(paperadministration/papsersearch/papersearch)に渡す
		$contents['papers'] = Model_Paperadministration_Papersearch::find_paper($query);

		$contents['pagetitle'] = Model_Paperadministration_Papersearch::trans_word($pagetitle);

		//検索してきた論文たちをViewのコンテンツ部分(paperadministration/parts/newpaper)に渡す
		$data['content'] = View::forge('paperadministration/parts/content', $contents);
		//main.jsに検索結果を挿入済みのコンテンツ部分を渡す
		return $data['content'];
	}

	//検索ボタンが押されたときの処理
	public function action_search(){
		//main.jsから投げられたpostdataを取得
		$category = Input::post('category');
		$refine = Input::post('refine');
		$text = Input::post('text');
		//検索条件の生成
		$query = [
					'limit' => '',
					'order' => 'year',
					'column' => 'category',
					'value' => $category,
					'column2' => '',
					'value2' => '',
				];
		if($category=='all'){
			$query['column'] = '';
			$query['value'] = '';
		}
		//テキストボックスに何も入力されていなかったら
		if($text){
			if($refine=='all'){
				$query['value2'] = '%'.$text.'%';
				//生成した検索条件をModel(paperadministration/papsersearch/papersearch)に渡す
				$contents['papers'] = Model_Paperadministration_Papersearch::find_all($query);
			}else{
				$query['column2'] = $refine;
				$query['value2'] = '%'.$text.'%';
				//生成した検索条件をModel(paperadministration/papsersearch/papersearch)に渡す
				$contents['papers'] = Model_Paperadministration_Papersearch::find_paper($query);
			}
		}else{
			//生成した検索条件をModel(paperadministration/papsersearch/papersearch)に渡す
			$contents['papers'] = Model_Paperadministration_Papersearch::find_paper($query);
		}

		$contents['pagetitle'] = '';

		//検索してきた論文たちをViewのコンテンツ部分(paperadministration/parts/newpaper)に渡す
		$data['content'] = View::forge('paperadministration/parts/content', $contents);
		//main.jsに検索結果を挿入済みのコンテンツ部分を渡す
		return $data['content'];
	}
}
