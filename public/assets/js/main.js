function Ajax(pagetitle){
    var postdata = { pagetitle:pagetitle };
    console.log(pagetitle);
    //検索ボタンが押されたときだけ取得する情報
    if(pagetitle=='search'){
        postdata['text'] = document.search.query.value;
        postdata['refine'] = document.search.refine.value;
        postdata['category'] = document.search.category.value;
        console.log(postdata);
        var posturl = '/paperadministration/papersearch/search.json';
    }else{
        var posturl = '/paperadministration/papersearch/genresearch.json';
    }
    //controllerに投げる
    $.ajax({
        type: 'post',
        url: posturl,
        data: postdata,
        success: function(view) {
            console.log(':success');
            //papersearch/action_dataから渡されたデータを表示する
            $('#page-content-wrapper').html(view);
        }
    });
}
