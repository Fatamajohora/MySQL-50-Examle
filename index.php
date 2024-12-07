<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

  <div class="container">

    
    <?php
    //======MySQL SELECT=========

   //Example-01
    SELECT * FROM
    address, students
    WHERE address.id = students.a_id

  //Example-02
    SELECT students.name, students.age, students.email,address.location 
    FROM 
    address, students 
    WHERE address.id = students.a_id;

  //Example-03
    SELECT * FROM `students` WHERE name= "Robin" OR age=11;

  //Example-04
    SELECT * FROM `students` WHERE name= "Robin" AND age=11;

  //EXAMPLE-05
    SELECT * FROM `students` WHERE name LIKE "%r";

  //Example-06
    SELECT * FROM `students` WHERE name LIKE "%r%";

  //Example-07
    SELECT * FROM `students` WHERE name LIKE "r%";

  //Example-08
    SELECT name, age, email FROM students;

  //Example-09
  SELECT * FROM students;

  //EXxample-10
  SELECT address FROM students;

  //====== Order by ======

  //Example-11
  SELECT students.name 
  FROM `students`
  ORDER BY name ASC;

  //Example-12
  SELECT students.name 
  FROM `students`
  ORDER BY name DESC;

  //Example-13
  SELECT * FROM students
  ORDER BY name;

  //Example-14
  SELECT * FROM students
  ORDER BY name ASC, age DESC;
  
  //Example-15
  DELETE FROM students WHERE name='Robin';

  //Example-16
  UPDATE students
  SET name = 'Robin', address = 'Dhanmondi'
  WHERE id = 1;

  //Example-17
  SELECT name, age, address
  FROM students
  WHERE Address IS NULL;

  //Example-18
  INSERT INTO students (name, age, email)
  VALUES ('Ritu', '13', 'ritu@gmail.com');

  //Example-19
  SELECT students.name 
  FROM `students`
  LIMIT 3;

  //Example-20
  SELECT students.name 
  FROM `students`
  ORDER BY name ASC
  LIMIT 3 OFFSET 3;

  //Example-21
  SELECT students.name 
  FROM `students`
  ORDER BY name ASC
  LIMIT 3;
  
  //Example-22
  SELECT students.name 
  FROM `students`
  ORDER BY id DESC
  LIMIT 3;

  //Example-23
  SELECT MIN(age) AS Smallestage
  FROM students;

  //Example-24
  SELECT MAX(age) AS Largestage
  FROM students;

  //Example-25
  SELECT COUNT(id)
  FROM students;

  //Example-26

  SELECT AVG(age)
  FROM students;

  //Example-27
  SELECT * FROM students
  WHERE age BETWEEN 10 AND 14;

  //Example-28
  SELECT id AS students_id
  FROM students;

  //Example-29
  SELECT * FROM students
  WHERE name BETWEEN 'Robin' AND 'Ritu'
  ORDER BY name;

  //Example-30
  SELECT * FROM students
  WHERE name NOT BETWEEN 'Robin' AND 'Raju'
  ORDER BY name;



   ?>

  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>