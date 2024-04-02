<?php
include "../action/get_all_assignments_action.php";

$inprogressAssignments = getAllInProgressAssignments();
$incompleteAssignments = getAllIncompleteAssignments();
$completedAssignments = getAllCompletedAssignments();
$recentAssignments = getAllRecentAssignments();

$numAA = count(getAllAssignments());
$numIPA = count($inprogressAssignments);
$numICA = count($incompleteAssignments);
$numCA = count($completedAssignments);

