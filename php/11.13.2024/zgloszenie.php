
    <?php
    
    $conn=mysqli_connect('localhost','root','','baza');
    if(!$conn){
        echo "problem z bazą";
        exit;
    }
    else{
    $lowisko=$_POST['lowisko'];
    $data=$_POST['data'];
    $sedzia=$_POST['sedzia'];
    if(!isset($lowisko)&& !isset($data) && !isset($sedzia)){
        echo "wypełnij dane kasztanie";
    }
    else{
    $query=mysqli_query($conn,"INSERT into zawody_wedkarskie(Karty_wedkarskie_id,Lowisko_id,data_zawodow,sedzia) values(0,$lowisko,'$data','$sedzia')");
        if(!$query){
            echo "błąd?";
            exit;
        }
}}
    mysqli_close($conn);
    ?>
