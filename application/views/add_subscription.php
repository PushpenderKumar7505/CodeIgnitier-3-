<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Subscription</title>
</head>
<body>
	
  
    <form action="<?=base_url('insert')?>" method="post">
        Package Name:<input type="text" placeholder="Enter your package name" name="package_name" required><br><br>
        Created:<input type="date" placeholder="Enter your created date"  name="created" required><br><br>
        Package Type:<input type="text" placeholder="Enter your package type" name="package_type" required><br><br>
        <!-- Package Status:<input type="status" placeholder="Enter your package status" name="package_status" required><br><br> -->
       <button type="submit">Submit</button>
    </form>
</body>
</html>