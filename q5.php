<?php
// Question 5: Analyze Query Count

$projects = Project::with('tasks')->get();
foreach ($projects as $project) {
 foreach ($project->tasks as $task) {
 echo $task->title;
 }


// Jab hum project ke sath with ke help se tasks ko fetch krenge to wha pr 1 query project ko fetch krne ke liye 
// chalegi dusri usse related tasks ke chahe wah project aur uske project  kitne bhi ho .
// ese Eager loading kahte hai or avoid to N+1 query kahte hai ===>esse data hame fastly receive hota hai.

// Query Count =2



?>