
<?php

use yii\helpers\Html;

$this->title = 'Вид Show';

?>
<h1>Show action</h1>





<button class="btn btn-success" id="btn">Click me...</button>
<?php

$js = <<<JS
	$('#btn').on('click', function(){
		$.ajax({
			url: 'index.php?r=my/show',
			data: {test : '123'},
			type: 'POST',
			success: function(res){
				console.log(res);
			},
			error: function(){
				alert('Error!');
			}
			});
		});

JS;

$this->registerJs($js);

//foreach ($pass as $value) {
//	echo $value->lastname . '<br>';
//}
var_dump($pass);
?>