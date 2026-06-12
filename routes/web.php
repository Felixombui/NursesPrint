<?php

use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', function () {
    return view('index');
});

// Library Subject Page (e.g., /library/ati-rn/pharmacology)
Route::get('/library/{exam}/{subject}', function ($exam, $subject) {
    $formattedExam = strtoupper(str_replace('-', ' ', $exam));
    $formattedSubject = ucwords(str_replace('-', ' ', $subject));

    return view('library', [
        'examName' => $formattedExam,
        'subjectName' => $formattedSubject,
        'examSlug' => $exam,
        'subjectSlug' => $subject
    ]);
})->name('library.subject');

// Direct Practice Quiz Page (Points to your existing practice.blade.php)
Route::get('/practice/{exam}/{subject}', function ($exam, $subject) {
    $formattedExam = strtoupper(str_replace('-', ' ', $exam));
    $formattedSubject = ucwords(str_replace('-', ' ', $subject));

    return view('practice', [
        'examName' => $formattedExam,
        'subjectName' => $formattedSubject,
        'examSlug' => $exam,
        'subjectSlug' => $subject
    ]);
})->name('practice.start');