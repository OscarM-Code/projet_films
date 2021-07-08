$('form').bind('submit',function(e){
e.preventDefault();
$.ajax({
type:'POST',
url:'controler.php',
data:$(this).serialize(),
success:function(salut){
console.log('succes');
$('body').html(JSON.parse(salut));

}
})
})