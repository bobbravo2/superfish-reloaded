module('Testing Setup');
test( "Test invalid method", function() {
	throws(function  () {
		$("ul").superfish('invalid'); 
	}, /Method/);
});
test('Init', function  () {
	var instance = $("#tests").superfish();
	ok(instance, 'init successful');
	ok(instance.superfish('destroy'), 'destroy successful');
});
var instance;
module('instance tests', {
	setup: function  () {
		instance = $("#tests").superfish(); 
}, teardown: function  () {
	instance.superfish('destroy');
}
});
test('module instance', function  () {
	ok(instance, 'setup worked');
});