
<!DOCTPE html>
<html>
<body>
        
     <?php
        use Illuminate\Support\Facades\DB;

        $VIDEOEBI = DB::select('select * from vids');
        echo "<pre>";
             print_r($VIDEOEBI); 
             echo"</pre";

    ?>
</body>

</html>