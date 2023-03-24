<?php

require './models/HomeModel.php';

$all_notes = getAllNotes();

require './views/HomeView.php';