<script>
    $('#inputPesquisaPaciente').keyup(
    function () 
    {
        var pesquisa = $(this).val();

        axios.post("{{route('listaPacientes')}}", {
            pesquisa: '%'+pesquisa+'%'
        })
        .then(function (response) {
          
            var resultado = response.data;
           
            if (resultado[0].nm_paciente == null || pesquisa == '' || resultado[0].nm_paciente == ''){
                $('#retornoPacientes').html(
                    '<tr>'
                    +'<td class="text-center" colspan="2"><a href="{{route('pacientes.index')}}"' 
                    +'class="btn btn-sm btn-default">Cadastrar novo paciente</a></td>'
                    +'</tr>'
                );
            }else{
                $('#retornoPacientes').empty();
                for (let i = 0; i < resultado.length; i++) {
                    $('#retornoPacientes').append(
                    '<tr>'
                    +'<td>'+resultado[i].nm_paciente+'</td>'
                    +'<td class="text-right"><a href="{{route('atendimento.create')}}" class="btn btn-sm btn-default">Atender</a></td>'
                    +'</tr>'
                ); 
                }                 
            }
        })
        .catch(function (error) {
            console.log(error);
        }); 
    });
 
</script>