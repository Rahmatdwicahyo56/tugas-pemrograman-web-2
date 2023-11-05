<!DOCTYPE html>
<html>
<head>
<style>

.container {
    display: flex;
    flex-direction: column;
}

.row {
    display: flex;
}

.box {
    width: 50px;
    height: 50px;
    background-color: grey;
    margin: 5px;
}

.box1 {
    background-color: grey;
}
</style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="box"><?php echo "A";?></div>
    </div>
    <div class="row">
        <div class="box box1"><?php echo "A";?></div>
        <div class="box box1"><?php echo "B";?></div>
    </div>
    <div class="row">
        <div class="box box1"><?php echo "A";?></div>
        <div class="box box1"><?php echo "B";?></div>
        <div class="box box1"><?php echo "C";?></div>
    </div>
</div>
</body>
</html>
