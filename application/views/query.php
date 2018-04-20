SELECT u.FirstName, u.LastName, C.CLassName, ut.FirstName AS Teacher_name
FROM users AS u
INNER JOIN students AS s 
INNER JOIN class AS c
INNER JOIN teacher_class as tc
INNER JOIN users AS ut 
ON u.UserId = s.StudentId
AND c.ClassId = s.ClassId
AND c.ClassId = tc.ClassId
AND tc.TeacherId = ut.UserId
WHERE u.PhoneNumber = '0785265906'


SELECT u.FirstName, u.LastName, C.CLassName, ut.FirstName AS Teacher_name
FROM users AS u
INNER JOIN students AS s 
INNER JOIN class AS c
INNER JOIN teacher_class as tc
INNER JOIN users AS ut 
ON u.UserId = s.StudentId
AND c.ClassId = s.ClassId
AND c.ClassId = tc.ClassId
AND tc.TeacherId = ut.UserId
WHERE u.PhoneNumber = '0785265906'
AND u.FirstName LIKE '%yvette%'