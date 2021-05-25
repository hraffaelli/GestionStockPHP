function searchIndex() {
    $.fn.multiFilter = function(filters) {
        var $table = $(this);
        return $table.find('#myTable > tr').each(function() {
            var tr = $(this);

            // Make it an array to avoid special cases later.
            if (!$.isArray(filters))
                filters = [filters];

            howMany = 0;
            for (i = 0, f = filters[0]; i < filters.length; f = filters[++i]) {
                var index = 0;
                $table.find('thead > tr > th').each(function(i) {
                    if ($(this).text() == f.column) {
                        index = i;
                        return false;
                    }
                });
                var text = tr.find('td:eq(' + index + ')').text();
                if (text.toLowerCase().indexOf(f.word.toLowerCase()) != -1)
                    ++howMany;
            }
            if (howMany == filters.length)
                tr.show();
            else
                tr.hide();
        });
    };
    (jQuery);
    $('#no_piece').keyup(function() {
        var t = $('table');
        $('#data').multiFilter([
            { column: 'N° Pièce', word: this.value },
            { column: 'Date', word: $('#date_code').val() },
            { column: 'Tiers', word: $('#id_tiers').val() },
            { column: 'Type', word: $('#type_code').val() },
            { column: 'Statut', word: $('#statut').val() }
        ]);
    });
    $('#date_code').keyup(function() {
        var t = $('table');
        $('#data').multiFilter([
            { column: 'N° Pièce', word: $('#no_piece').val() },
            { column: 'Date', word: this.value },
            { column: 'Tiers', word: $('#id_tiers').val() },
            { column: 'Type', word: $('#type_code').val() },
            { column: 'Statut', word: $('#statut').val() }
        ]);
    });
    $('#id_tiers').keyup(function() {
        var t = $('table');
        $('#data').multiFilter([
            { column: 'N° Pièce', word: $('#no_piece').val() },
            { column: 'Date', word: $('#date_code').val() },
            { column: 'Tiers', word: this.value },
            { column: 'Type', word: $('#type_code').val() },
            { column: 'Statut', word: $('#statut').val() }
        ]);
    });
    $('#type_code').keyup(function() {
        var t = $('table');
        $('#data').multiFilter([
            { column: 'N° Pièce', word: $('#no_piece').val() },
            { column: 'Date', word: $('#date_code').val() },
            { column: 'Tiers', word: $('#id_tiers').val() },
            { column: 'Type', word: this.value },
            { column: 'Statut', word: $('#statut').val() }
        ]);
    });
    $('#nom_article').keyup(function() {
        var t = $('table');
        $('#data').multiFilter([
            { column: 'N° Pièce', word: $('#no_piece').val() },
            { column: 'Date', word: $('#date_code').val() },
            { column: 'Tiers', word: $('#id_tiers').val() },
            { column: 'Type', word: $('#type_code').val() },
            { column: 'Nom Article', word: this.value },
            { column: 'Statut', word: $('#statut').val() }
        ]);
    });
    $('#statut').keyup(function() {
        var t = $('table');
        $('#data').multiFilter([
            { column: 'N° Pièce', word: $('#no_piece').val() },
            { column: 'Date', word: $('#date_code').val() },
            { column: 'Tiers', word: $('#id_tiers').val() },
            { column: 'Type', word: $('#type_code').val() },
            { column: 'Statut', word: this.value }
        ]);
    });

}


function search() {
    $.fn.multiFilter = function(filters) {
        var $table = $(this);
        return $table.find('#myTable > tr').each(function() {
            var tr = $(this);

            // Make it an array to avoid special cases later.
            if (!$.isArray(filters))
                filters = [filters];

            howMany = 0;
            for (i = 0, f = filters[0]; i < filters.length; f = filters[++i]) {
                var index = 0;
                $table.find('thead > tr > th').each(function(i) {
                    if ($(this).text() == f.column) {
                        index = i;
                        return false;
                    }
                });
                var text = tr.find('td:eq(' + index + ')').text();
                if (text.toLowerCase().indexOf(f.word.toLowerCase()) != -1)
                    ++howMany;
            }
            if (howMany == filters.length)
                tr.show();
            else
                tr.hide();
        });
    };
    (jQuery);
    $('#no_piece').keyup(function() {
        var t = $('table');
        $('#data').multiFilter([
            { column: 'N° Pièce', word: this.value },
            { column: 'Date', word: $('#date_code').val() },
            { column: 'Tiers', word: $('#id_tiers').val() },
            { column: 'Nom Article', word: $('#nom_article').val() },
            { column: 'Statut', word: $('#statut').val() }
        ]);
    });
    $('#date_code').keyup(function() {
        var t = $('table');
        $('#data').multiFilter([
            { column: 'N° Pièce', word: $('#no_piece').val() },
            { column: 'Date', word: this.value },
            { column: 'Tiers', word: $('#id_tiers').val() },
            { column: 'Nom Article', word: $('#nom_article').val() },
            { column: 'Statut', word: $('#statut').val() }
        ]);
    });
    $('#id_tiers').keyup(function() {
        var t = $('table');
        $('#data').multiFilter([
            { column: 'N° Pièce', word: $('#no_piece').val() },
            { column: 'Date', word: $('#date_code').val() },
            { column: 'Tiers', word: this.value },
            { column: 'Nom Article', word: $('#nom_article').val() },
            { column: 'Statut', word: $('#statut').val() }
        ]);
    });
    $('#nom_article').keyup(function() {
        var t = $('table');
        $('#data').multiFilter([
            { column: 'N° Pièce', word: $('#no_piece').val() },
            { column: 'Date', word: $('#date_code').val() },
            { column: 'Tiers', word: $('#id_tiers').val() },
            { column: 'Nom Article', word: this.value },
            { column: 'Statut', word: $('#statut').val() }
        ]);
    });
    $('#statut').keyup(function() {
        var t = $('table');
        $('#data').multiFilter([
            { column: 'N° Pièce', word: $('#no_piece').val() },
            { column: 'Date', word: $('#date_code').val() },
            { column: 'Tiers', word: $('#id_tiers').val() },
            { column: 'Nom Article', word: $('#nom_article').val() },
            { column: 'Statut', word: this.value }
        ]);
    });
}

function export2csv() {
    function download_csv(csv, filename) {
        var csvFile;
        var downloadLink;

        // CSV FILE
        csvFile = new Blob([csv], { type: "text/csv" });

        // Download link
        downloadLink = document.createElement("a");

        // File name
        downloadLink.download = filename;

        // We have to create a link to the file
        downloadLink.href = window.URL.createObjectURL(csvFile);

        // Make sure that the link is not displayed
        downloadLink.style.display = "none";

        // Add the link to your DOM
        document.body.appendChild(downloadLink);

        // Lanzamos
        downloadLink.click();
    }

    function export_table_to_csv(html, filename) {
        var csv = [];
        //var rows = document.querySelectorAll("table tr:visible");
        var rows = $("table tr:visible");

        for (var i = 0; i < rows.length; i++) {
            var row = [],
                cols = rows[i].querySelectorAll("td.export, th");

            for (var j = 0; j < cols.length; j++)
                row.push(cols[j].innerText);

            csv.push(row.join(";"));
        }

        // Download CSV
        download_csv(csv.join("\n"), filename);
    }


    document.querySelector("#btnexport").addEventListener("click", function() {
        var html = document.querySelector("table").outerHTML;
        export_table_to_csv(html, "Export.csv");
    });
}