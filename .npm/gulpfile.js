var gulp = require('gulp');
var exec = require('child_process').exec;

gulp.task("drush", function () {
	console.log("Clearing the drush cache");

	exec('drush cr', function (err, stdout, stderr) {
		console.log(stdout);
		console.log(stderr);
		if (err) console.log("There was an error executing the drush gulp task.");
	});

});

gulp.task("watch", function () {
	gulp.watch(['../*.yml', '../src/**/*.*', '../templates/*.twig'], ['drush'])
});

gulp.task("default", ['watch']);