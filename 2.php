Consulta en BD 

   
   SELECT unic_department.department_name, COUNT (unic_employee.department_id) AS Resultado
     FROM unic_employee
   INNER JOIN unic_employee ON unic_department.id = unic_employee.department_id
     GROUP BY unic_department.department_name
       HAVING Resultado >= 2;
