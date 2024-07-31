<?php

$mysqli = require __DIR__. "/database.php";

// If the GET request "id" exists (poll id)...
if (1) {
    // MySQL query that selects the poll records by the GET request "id"
    $stmt = $mysqli->prepare('SELECT * FROM polls WHERE id =1');
    
    $stmt->execute();
    // Fetch the record
    $result = $stmt->get_result();
    $poll = $result->fetch_assoc();
    // Check if the poll record exists with the id specified
    if ($poll) {
        // MySQL Query that will get all the answers from the "poll_answers" table ordered by the number of votes (descending)
        $stmt = $mysqli->prepare('SELECT * FROM poll_answers WHERE poll_id =1 ORDER BY votes DESC');
        
        $stmt->execute();
        // Fetch all poll answers
        $result = $stmt->get_result();
        $poll_answers = $result->fetch_all(MYSQLI_ASSOC);
        // Total number of votes, will be used to calculate the percentage
        $total_votes = 0;
        foreach($poll_answers as $poll_answer) {
            // Every poll answers votes will be added to total votes
            $total_votes += $poll_answer['votes'];
        }
    } else {
        exit('Poll with that ID does not exist.');
    }
} else {
    exit('No poll ID specified.');
}
?>

<div class="content poll-result">
	<h2>VICE PRESIDENT</h2>
	
    <div class="wrapper">
        <?php foreach ($poll_answers as $poll_answer): ?>
        <div class="poll-question">
            <h3><?=$poll_answer['candidate']?> <span>(<?=$poll_answer['votes']?> Votes)</span></h3>
            <div class="result-bar" style= "width:<?=@round(($poll_answer['votes']/$total_votes)*100)?>%">
                <?=@round(($poll_answer['votes']/$total_votes)*100)?>%
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php

$mysqli = require __DIR__. "/database.php";

// If the GET request "id" exists (poll id)...
if (2) {
    // MySQL query that selects the poll records by the GET request "id"
    $stmt = $mysqli->prepare('SELECT * FROM polls WHERE id =2');
    
    $stmt->execute();
    // Fetch the record
    $result = $stmt->get_result();
    $poll = $result->fetch_assoc();
    // Check if the poll record exists with the id specified
    if ($poll) {
        // MySQL Query that will get all the answers from the "poll_answers" table ordered by the number of votes (descending)
        $stmt = $mysqli->prepare('SELECT * FROM poll_answers WHERE poll_id =2 ORDER BY votes DESC');
        
        $stmt->execute();
        // Fetch all poll answers
        $result = $stmt->get_result();
        $poll_answers = $result->fetch_all(MYSQLI_ASSOC);
        // Total number of votes, will be used to calculate the percentage
        $total_votes = 0;
        foreach($poll_answers as $poll_answer) {
            // Every poll answers votes will be added to total votes
            $total_votes += $poll_answer['votes'];
        }
    } else {
        exit('Poll with that ID does not exist.');
    }
} else {
    exit('No poll ID specified.');
}
?>

<div class="content poll-result">
	<h2>GENERAL SECRETARY</h2>
	
    <div class="wrapper">
        <?php foreach ($poll_answers as $poll_answer): ?>
        <div class="poll-question">
            <h3><?=$poll_answer['candidate']?> <span>(<?=$poll_answer['votes']?> Votes)</span></h3>
            <div class="result-bar" style= "width:<?=@round(($poll_answer['votes']/$total_votes)*100)?>%">
                <?=@round(($poll_answer['votes']/$total_votes)*100)?>%
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php

$mysqli = require __DIR__. "/database.php";

// If the GET request "id" exists (poll id)...
if (3) {
    // MySQL query that selects the poll records by the GET request "id"
    $stmt = $mysqli->prepare('SELECT * FROM polls WHERE id =3');
    
    $stmt->execute();
    // Fetch the record
    $result = $stmt->get_result();
    $poll = $result->fetch_assoc();
    // Check if the poll record exists with the id specified
    if ($poll) {
        // MySQL Query that will get all the answers from the "poll_answers" table ordered by the number of votes (descending)
        $stmt = $mysqli->prepare('SELECT * FROM poll_answers WHERE poll_id =3 ORDER BY votes DESC');
        
        $stmt->execute();
        // Fetch all poll answers
        $result = $stmt->get_result();
        $poll_answers = $result->fetch_all(MYSQLI_ASSOC);
        // Total number of votes, will be used to calculate the percentage
        $total_votes = 0;
        foreach($poll_answers as $poll_answer) {
            // Every poll answers votes will be added to total votes
            $total_votes += $poll_answer['votes'];
        }
    } else {
        exit('Poll with that ID does not exist.');
    }
} else {
    exit('No poll ID specified.');
}
?>

<div class="content poll-result">
	<h2>JOINT SECRETARY</h2>
	
    <div class="wrapper">
        <?php foreach ($poll_answers as $poll_answer): ?>
        <div class="poll-question">
            <h3><?=$poll_answer['candidate']?> <span>(<?=$poll_answer['votes']?> Votes)</span></h3>
            <div class="result-bar" style= "width:<?=@round(($poll_answer['votes']/$total_votes)*100)?>%">
                <?=@round(($poll_answer['votes']/$total_votes)*100)?>%
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php

$mysqli = require __DIR__. "/database.php";

// If the GET request "id" exists (poll id)...
if (3) {
    // MySQL query that selects the poll records by the GET request "id"
    $stmt = $mysqli->prepare('SELECT * FROM polls WHERE id =3');
    
    $stmt->execute();
    // Fetch the record
    $result = $stmt->get_result();
    $poll = $result->fetch_assoc();
    // Check if the poll record exists with the id specified
    if ($poll) {
        // MySQL Query that will get all the answers from the "poll_answers" table ordered by the number of votes (descending)
        $stmt = $mysqli->prepare('SELECT * FROM poll_answers WHERE poll_id =3 ORDER BY votes DESC');
        
        $stmt->execute();
        // Fetch all poll answers
        $result = $stmt->get_result();
        $poll_answers = $result->fetch_all(MYSQLI_ASSOC);
        // Total number of votes, will be used to calculate the percentage
        $total_votes = 0;
        foreach($poll_answers as $poll_answer) {
            // Every poll answers votes will be added to total votes
            $total_votes += $poll_answer['votes'];
        }
    } else {
        exit('Poll with that ID does not exist.');
    }
} else {
    exit('No poll ID specified.');
}
?>

<div class="content poll-result">
	<h2>JUNIOR JOINT SECRETARY</h2>
	
    <div class="wrapper">
        <?php foreach ($poll_answers as $poll_answer): ?>
        <div class="poll-question">
            <h3><?=$poll_answer['candidate']?> <span>(<?=$poll_answer['votes']?> Votes)</span></h3>
            <div class="result-bar" style= "width:<?=@round(($poll_answer['votes']/$total_votes)*100)?>%">
                <?=@round(($poll_answer['votes']/$total_votes)*100)?>%
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
