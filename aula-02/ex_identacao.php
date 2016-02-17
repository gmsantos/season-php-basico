<?php

// Validate the school:
if (empty($_POST['school'])) {
echo "You forgot to enter your school.<br>";
$validate = 'false';
} elseif ($_POST['school'] != $_POST['away_team'] && $_POST['school'] != $_POST['home_team']) {
echo "Your school does not match one of the two on file for this game.<br>";
$validate = 'false';
} else {
$school = mysqli_real_escape_string($db, trim($_POST['school']));
$validate = 'true';
}

// Validate the password:
if (empty($_POST['pass'])) {
echo "You forgot to enter your password.<br>";
$validate = 'false';
} else {
$pass = mysqli_real_escape_string($db, trim($_POST['pass']));
$validate = 'true';
}

// Validate the away score:
if (!isset($_POST['away_score'])) {
echo "You forgot to enter the away score.<br>";
$validate = 'false';
} elseif (!is_numeric($_POST['away_score'])) {
echo "You entered an invalid score for the away team.<br>";
$validate = 'false';
} else {
$away_score_confirm = mysqli_real_escape_string($db, trim($_POST['away_score']));
$validate = 'true';
// Determine the winner and loser, and set variables:
if ($_POST['away_score'] > $_POST['home_score']) {
$winner = mysqli_real_escape_string($db, trim($_POST['away_team']));
$winner_score = mysqli_real_escape_string($db, trim($_POST['away_score']));
$loser = mysqli_real_escape_string($db, trim($_POST['home_team']));
$loser_score = mysqli_real_escape_string($db, trim($_POST['home_score']));
$tie = 'no';
} else if ($_POST['away_score'] < $_POST['home_score']) {$winner = mysqli_real_escape_string($db, trim($_POST['home_team']));$winner_score = mysqli_real_escape_string($db, trim($_POST['home_score']));$loser = mysqli_real_escape_string($db, trim($_POST['away_team']));$loser_score = mysqli_real_escape_string($db, trim($_POST['away_score']));$tie = 'no';
} else if ($_POST['away_score'] == $_POST['home_score']) {$tie = 'yes';$tie1 = mysqli_real_escape_string($db, trim($_POST['away_team']));
$tie2 = mysqli_real_escape_string($db, trim($_POST['home_team']));
$tie_score = mysqli_real_escape_string($db, trim($_POST['away_score']));
}}
