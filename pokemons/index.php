<?php
$data=file_get_contents('data.json');
$json=json_decode($data);

/* echo '<pre>';
print_r($json);
echo '</pre>'; */
echo '<h2>Number of pokemons:';
echo ($json-> count);
echo '</h2>';
$results=$json->results;
/* echo '<pre>';
echo print_r($results);
echo '</pre>'; */
$counter=0;
while($counter<$json-> count){
    echo '<section class="pokemons"><div class="name">';
    echo $results[$counter]->name . " " . $counter ;
    echo '</div>';
    echo '<div class="link">';
    echo $results[$counter]->url;
    echo '</div></section>';
    $counter++;
}

$results50=array_chunk($results, 50, true);
echo '<pre>';
echo print_r($results50[2]);
echo '</pre>';
/* echo '<pre> Get:';
echo print_r($_GET);
echo '</pre>'; */

?>

<?php
$user_input=$_GET['type'];


if($user_input<count($results50)&&$user_input>=0):
echo '<pre> You are requesting:';
echo print_r($results50[$user_input]);
echo '</pre>';

else:
    echo 'something else';
endif;

?>

<script>
async function GetPokemons() {
  let resp = await fetch(
    "formatted_data.json"
  );
  let json = await resp.json();
  
  console.log(json);
}
GetPokemons();
</script>
