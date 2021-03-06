<!DOCTYPE html>
<html lang="ja">
<head>

    <?php
        // ページ設定
        $title = "GUIソフトの設定ファイルを作成する方法";
        $commonhtml = "${_SERVER['DOCUMENT_ROOT']}/buildmydist-2/commonhtml";
        $distro = "misc";
        $description = "";

        // 共通ファイルを読み込み
        $domain = $_SERVER['HTTP_HOST'];
        include("${commonhtml}/head.php");
    ?>

</head>
<body>
    <?php include("${commonhtml}/beforemain.php"); ?>

    <main>
        <h2>GUIソフトの設定ファイルを作成する</h2>
        <p>nanoやVimなどの手動で設定ファイルを操作することを前提にしているソフトについては、どこの設定ファイルをいじったら良いのかが明確になっているためかんたんに編集できます。</p>
        <p>しかし、デスクトップ環境やGUIソフトウェアなどは設定をGUIで行うことが前提な場合が多くなっています。（Linuxでは全ての設定が最終的にはファイルで保存されます。）</p>
        <p>そのため、設定をどのように行い、どうやって必要なファイルだけを取り出して配置するかが重要になってきます。</p>
        <p>今回はXfceやUlauncherといったツールの設定ファイルを取り出す方法を解説します。</p>

        <div class="box-warning">
            ブラウザやその系列のソフトウェア（Eletronを使用しているソフトウェアなど）のデータを保存することは大変危険です。<br>
            思わぬところで個人情報は漏洩してしまう可能性が有ります。（ブラウザの設定ファイルは他のソフトよりダントツで複雑です。）
        </div>

        <h2>瀬底はいっそのことGUIでやる</h2>
        <p>この記事を見ている人の大半がLFBSやArchiso、AlterISOなどでairootfsを設定するために来ていると思います。</p>
        <p>まずは設定したいパッケージだけをパッケージリストに追加し、設定ファイルが不足している状態でビルドしてしまいましょう。</p>
        <p>そしてビルドしたisoを仮想マシンで起動します。そしてそのまま普段どおりGUIソフトの設定を仮想環境内で行ってください。</p>
        <p>後々でこの仮想環境内でGUIで作成した設定を取り出し、AlterISOやLFBSなどの適切な場所に配置します。</p>

        <h2>まずはパッケージだけを追加する</h2>
        <p>とりあえずパッケージだけを含めてビルドしましょう。ビルド方法についてはそれぞれのページの解説を参照してください。</p>
        <p>その後、仮想環境で起動してください。</p>
        <p>すなわち、この段階で最低限のGUIが仮想環境から起動可能である必要が有るということです。</p>
        <p>もしGUIが起動できない場合はこの先に進むことが出来ないので注意してください。</p>


    </main>

    <?php include("${commonhtml}/aftermain.php"); ?>
</body>
</html>
