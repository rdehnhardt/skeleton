<script type="text/javascript">
    $(function () {
        $('#container').highcharts({
            title: null,
            subtitle: null,
            credits: {enabled: false},
            xAxis: {
                categories: [{!! $categories !!}]
            },
            yAxis: {
                title: {
                    text: 'Qtd de Visitas'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#d8d8d8'
                }]
            },
            series: [
                {
                    name: 'Visitantes Únicos',
                    data: [{!! $unique !!}]
                },
                {
                    name: 'Páginas Visitadas',
                    data: [{!! $total !!}]
                }
            ]
        });
    });
</script>

<div id="container"></div>