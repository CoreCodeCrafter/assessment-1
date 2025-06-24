<?php


//  $project->tasks----> jo projects ke help se task fetch ho rha hai response time pr hum wha krne ne bachte hai 
// qki project ko fetch krne ke liye ek query chalegi dursi utni query chalengi jitne us project  se related task 
//  honge es trah yadi ek query project ke liye  5 uske exist task ke liye to  yese loading jayda hogi esliye hum
//  task ko project model define kr realtion bna lete hai phir use with ke help se query me chala dete hai 


public function show($id)
{
    $project = Project::with('tasks')->find($id);
    if (!$project || $project->user_id !== auth()->id()) {
        abort(403, "Unauthorized");
    }
    return response()->json($project->tasks);
}
?>