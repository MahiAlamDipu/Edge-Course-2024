<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>
<body>
    <h1>Associative Array</h1>

    <?php
    $courses = [
        [
            "courseTeacher" => "Nahin Ul Sadat",
            "courseName" => "Computer Architecture",
            "classRoom" => "B201",
            "googleClassRoom" => 'http://example.com'
        ],
        [
            "courseTeacher" => "Majharul Islam",
            "classRoom" => "B203",
            "courseName" => "Digital Signal Processing",
            "googleClassRoom" => 'http://example2.com'
        ],
        [
            "courseTeacher" => "Nahin Ul Sadat",
            "classRoom" => "B204",
            "courseName" => "Operating Systems",
            "googleClassRoom" => 'http://example3.com'
        ],
        [
            "courseTeacher" => "Tanvir Hasan",
            "classRoom" => "B205",
            "courseName" => "Database Management Systems",
            "googleClassRoom" => 'http://example4.com'
        ]
    ];
    ?>

    <!-- Display All Courses -->
    <ul>
        <?php foreach ($courses as $course): ?>
            <li>
                <a href="<?= $course['googleClassRoom'] ?>">
                    <?= $course['courseName'] ?> <!-- Corrected variable access -->
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

    <!-- Filtered Courses by Teacher -->
    <h1>Courses Taken by Nahin Ul Sadat:</h1>
    <ul>
        <?php foreach ($courses as $course): ?>
            <?php if ($course['courseTeacher'] === 'Nahin Ul Sadat'): ?> <!-- Added proper braces -->
                <li>
                    <?= $course['courseName'] ?>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</body>
</html>
