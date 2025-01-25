<?php include 'layout-header.php'; ?>

<main class="main">


    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .content {
            padding: 20px;
        }

        .section {
            background-color: lightblue;
            padding: 20px;
            border: 1px solid #ddd;
            margin-bottom: 20px;
        }

        .spacer {
            height: 800px;
            /* Simulate space between sections */
        }

        .pinned {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>

    <div class="content">
        <div class="section" id="section1">Section 1</div>
        <div class="spacer"></div>
        <div class="section" id="section2">Section 2</div>
        <div class="spacer"></div>
        <div class="section" id="section3">Section 3</div>
    </div>


</main> <!-- main -->

<?php include 'layout-footer.php'; ?>

