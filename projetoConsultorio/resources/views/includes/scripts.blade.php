<script>
    $('#inputPesquisaPaciente').keyup(
    function () 
    {
        var pesquisa = $(this).val();

        axios.post("{{route('listaPacientes')}}", {
            pesquisa: pesquisa
        })
        .then(function (response) {
            $('#retornoPacientes').html(
                '<tr>'
                +'<td>'+response.data.pesquisa+'</td>'
                +'</tr>'
            );
        })
        .catch(function (error) {
            console.log(error);
        }); 
    });
 
</script>