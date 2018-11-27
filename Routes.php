<?php 

Route::set('index.php', function() {
	index::CreateView('index');
	about::test();
});
Route::set('about', function() {
	about::CreateView('about');
	

});
Route::set('contact', function() {
	contact::CreateView('contact');
})

 ?>