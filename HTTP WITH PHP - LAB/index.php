<html>
    <head>

    </head>

    <body>
        <form methd="post" action="entry.php" enctype="multipart/form-data">
            First Name:
            <input type="text" name="first_name"/>
            <br><br>
            <input type="hidden" name="max_file_upload" value="1024">
            <input type="file" name="myfile1"/>
            <input type="file" name="myfile2"/>
            <br><br>
            <input type="reset" name="submit_button" value="Clear">

            <br><br>

        <?php for($i=0;$i<15;$i++){?>
        <?php echo $i; ?> . <input type="text" name="myname[k<?php echo $i; ?>]" min="1" maxlength="255"/><br>
        <?php } ?>

    <br><br>

        <input type="reset" name="submit_button" value="Clear"/>
        <button type="submit" name="submit_button" value="1">Click me</button>
        </form>
<a href="entry.php?Link=1">I am a link</a>
    </body>
</html>
<hr>
http://www.domain.com:80/path/file.php?param1={a:1,b:2}