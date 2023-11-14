<!-- Phần trắc nghiệm
Câu 1: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 9 )
Câu 2: a 
Câu 3: a 
Câu 4: a 
Câu 5: b 
-->

<!-- Phần thực hành -->
<?php
// Bài 1:
function generateFibonacci($n) {
  $fibonacci = array();
  $fibonacci[0] = 0;
  $fibonacci[1] = 1;
  for ($i = 2; $i < $n; $i++) {
      $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
  }
  return $fibonacci;
}
$n = 9; 
$daySoFibonacci= generateFibonacci($n);
echo "1. Dãy số Fibonacci đầu tiên có $n phần tử: ";
foreach ($daySoFibonacci as $number) {
  echo $number . " ";
}
echo "<br>";
// Câu 2: 
echo "<br>";
echo "Bài 2: <br>";
 // Tạo một mảng kết hợp chứa thông tin về học sinh
$students = [
    [
        'id' => 1,
        'name' => 'Hoang Ngoc Linh',
        'age' => 17,
        'grade' => 10
    ],
    [
        'id' => 2,
        'name' => 'Duong My Linh',
        'age' => 17,
        'grade' => 8
    ],
    [
        'id' => 3,
        'name' => 'Nguyen Thi Diu',
        'age' => 17,
        'grade' => 9
    ]
];

// Hiển thị thông tin của tất cả học sinh trong mảng
echo "Thông tin của tất cả học sinh:"."<br>";
foreach ($students as $student) {
    echo "ID: " . $student['id'] . "<br>";
    echo "Tên: " . $student['name'] . "<br>";
    echo "Tuổi: " . $student['age'] . "<br>";
    echo "Điểm: " . $student['grade'] . "<br>";
    echo "\n";
}

// Hàm tìm học sinh có điểm cao nhất (grade)
function student($students) {
    $highestGrade = 0;
    $m = null;

    foreach ($students as $student) {
        if ($student['grade'] > $highestGrade) {
            $highestGrade = $student['grade'];
            $m = $student;
        }
    }

    return $m;
}

// Gọi hàm student() để tìm học sinh có điểm cao nhất
$m = student($students);

// Kiểm tra xem có học sinh có điểm cao nhất hay không
if ($m) {
    echo "Học sinh có điểm cao nhất:\n";
    echo "ID: " . $m['id'] . "<br>";
    echo "Tên: " . $m['name'] . "<br>";
    echo "Tuổi: " . $m['age'] . "<br>";
    echo "Điểm: " . $m['grade'] . "<br>";
} else {
    echo "Không có học sinh nào trong danh sách"."<br>";
}

?>