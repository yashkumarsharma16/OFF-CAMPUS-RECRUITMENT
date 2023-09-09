<div class="well col-sm-12" style="background-color:#AED4F1; height: 150%; width:150%;margin:0px 0px;">

<?php

$items = array(
    "mark10" => "10th Marksheet",
    "mark12" => "12th Marksheet",
    "sem1" => "1st Sem Marksheet",
    "sem2" => "2nd Sem Marksheet",
    "sem3" => "3rd Sem Marksheet",
    "sem4" => "4th Sem Marksheet",
    "sem5" => "5th Sem Marksheet",
    "sem6" => "6th Sem Marksheet",
    "cert" => "Certification Course",
    "resume" => "Resume"
)

    ?>

<html>

<head>
    <title>Document Upload</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        form {
            display: inline-block;
            text-align: left;
        }

        body {
            text-align: center;
        }

        .center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 200px;
            border: 3px solid green;
        }

        input[type='file'] {
            color: transparent;
        }

        td {
            height: 40px;
            width: 250px;
            text-align: center;
            vertical-align: middle;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th {
            text-align: center;
        }
    </style>
</head>

<body onload="fetchDocuments()">
    <div class="content">
        <h1>Upload Documents</h1>
        <form class="form" action="upload.php">
            <table style="width:100%">
                <tr>
                    <th>File Name</th>
                    <th style="text-align:left;">Upload File</th>
                 


                    <th colspan="2" style="text-align:left;">Actions</th>
                </tr>
                <?php
                foreach ($items as $item => $val) {
                    ?>
                    <tr>
                        <td id="<?php echo $item; ?>">
                            <?php echo "$val"; ?>
                        </td>
                        <td>
                            <input type="file" onchange="uploadFile(this)" name="<?php echo $item; ?>">
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary" onclick="openDocument(this)"
                                data-document-type="<?php echo $item; ?>">View</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary" onclick="deleteDocument(this)"
                                data-document-type="<?php echo $item; ?>">Delete</button>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </form>
    </div>
    <script>
        items = [];
        async function fetchDocuments() {
            var response = await fetch("document-list.php");
            response = await response.json();
            items = response.data;
            for (const item in response) {

            }
        }
        async function uploadFile(element) {
            var file = element.files[0];
            var formData = new FormData();
            formData.append('document', file);
            formData.append("name", element.getAttribute("name"));
            try {

                var response = await fetch("upload.php", {
                    method: "POST",
                    body: formData
                })
                response = await response.json();
                if (response.success) {
                    alert(`${document.getElementById(element.getAttribute("name")).innerHTML.trim()} Uploaded Successfully!`);
                    fetchDocuments();
                } else {
                    throw Error;
                }
            } catch (err) {
                alert("Something went Wrong!");
            }
        }
        async function deleteDocument(element) {
            let filename = items[element.dataset.documentType];
            if (filename) {
                var formData = new FormData();
                formData.append("name", filename);
                var response = await fetch("delete-document.php", { method: "POST", body: formData });
                response = await response.json();
                if (response.success) {
                    alert(`${document.getElementById(element.dataset.documentType).innerHTML.trim()} Deleted Successfully!`);
                    fetchDocuments();
                } else {
                    alert("Something went Wrong!");
                }
            } else {
                alert("Please Upload Document First!");
            }
        }
        function openDocument(element) {
            if (items[element.dataset.documentType]) {
                window.open("files/" + items[element.dataset.documentType]);
            } else {
                alert("Document Not Uploaded!")
            }
        }
    </script>

</body>

</html>