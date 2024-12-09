<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>
<body>

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
    function filterByTeacher($cou,$tea)
    {
        $filteredCourses =[];
        foreach($cou as $course)
        {
            if($course['courseTeacher'] === 'Nahin Ul Sadat')
            {
                $filteredCourses[] = $course;
            }
        }

        return $filteredCourses;
    }
    ?>

    <h1>After Filter:</h1>
    <ul>
        <?php foreach (filterByTeacher($courses, 'Nahin Ul Sadat') as $course): ?>
            <li>
                <?= $course['courseName']; ?>
            </li>
        <?php endforeach; ?>
    </ul>

 
</body>
</html>
