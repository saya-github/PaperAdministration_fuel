<ul class="sidebar-nav">
    <li class="sidebar-brand">
        <a href="#">
            PaperAdministration
        </a>
    </li>
    <li>
        <a href="#" onClick="Ajax('all');">すべて</a>
    </li>
    <li>
        <a href="#" onClick="Ajax('national');">国内発表</a>
    </li>
    <li>
        <a href="#" onClick="Ajax('international');">国際会議</a>
    </li>
    <li>
        <a href="#" onClick="Ajax('journal');">論文誌</a>
    </li>
    <li>
        <a href="#" onClick="Ajax('tesis');">学位論文</a>
    </li>
    <li>
        <a href="#" onClick="Ajax('award');">受賞</a>
    </li>
    <li>
        <a href="#" onClick="Ajax('press');">報道</a>
    </li>
    <form name="search">
        <li>
            <font color="white">絞り込み検索</font>
        </li>
        <input type="text" name="query" size="20">
        <li>
            <input type="radio" name="refine" value="author" checked>
            <font color="white">著者</font>
        </li>
        <li>
            <input type="radio" name="refine" value="keyword">
            <font color="white">キーワード</font>
        </li>
        <li>
            <input type="radio" name="refine" value="all">
            <font color="white">すべて</font>
        </li>
        <li>
            <font color="white">分野の選択</font>
        </li>
        <select name="category">
            <option value="all">すべて</option>
            <option value="Real">実世界</option>
            <option value="Communication">コミュニケーション</option>
            <option value="Gimmick">仕掛け学</option>
            <option value="InformationCompiled">情報編纂</option>
            <option value="Comic">コミック工学</option>
            <option value="Onomatopoeia">オノマトペ</option>
        </select>
        <input type="button" name="search" value="検索" onClick="Ajax('search');">
    </form>
</ul>