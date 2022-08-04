<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <style>
    h1,
    h2 {
        text-align: center;
        font-family: Calibri;
    }

    table.mytable {
        border-collapse: collapse;
    }

    table.mytable td,
    th {
        border: 1px solid grey;
        padding: 5px 15px 2px 7px;
    }

    th {
        background-color: #f2e4d5;
    }
    </style>
</head>

<body>

    <h1 class="mt-5" style="padding-top: 50px;" id="dev">Queries</h1>
    <div align='center'>
        <button class="btn btn-lg btn-danger" type="submit"
            onclick="location.href='<?php echo site_url('main/query1') ?>'">Total customer
            orders</button>
        <button class="btn btn-lg btn-dark" type="submit"
            onclick="location.href='<?php echo site_url('main/query2') ?>'">Ranked items by
            sales</button>
    </div>
    <h2>Total Developers Technologies</h2>
    <div align='center'>
        <?php
        $tmpl = array('table_open' => '<table class="mytable">');
        $this->table->set_template($tmpl);

        $this->db->query('drop table if exists temp');
        $this->db->query('create temporary table temp as (select developer.devID, devName, COUNT(techID) AS TotalProductivityTechnology from productivity_technology, developer where developer.devID = developer.devID group by developer.devID)');
        $query = $this->db->query('select * from temp;');
        echo $this->table->generate($query);
        ?>
    </div>
</body>

</html>