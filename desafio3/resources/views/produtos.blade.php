@extends('layouts.default')
@section('conteudo')
<div class="flex-center position-ref full-height">
    <div class="product-container">
        <div class="spaced-contend">
            <h1>Produtos</h1>
            <a href="/produtos/cadastrar">
                <button type="button" class="btn btn-success btn-sm">+ Adicionar</button>
            </a>
        </div>
            <table class="table">
                <thead>
                <tr>
                    <th  scope="col">#</th>
                    <th  scope="col">Nome</th>
                    <th  scope="col">Preço</th>
                    <th  scope="col">Categoria</th>
                    <th  scope="col">Descrição</th>
                    <th  scope="col">Ações</th>
                </tr>
                </thead>
                @forelse ($produtos as $produto)
                    <tbody>
                    <tr class="table-light">
                        <th scope="row">
                            {{$produto->id}}
                        </th>
                        <td scope="row">
                            {{$produto->name}}
                        </td>
                        <td scope="row">
                            {{$produto->price}}
                        </td>
                        <td scope="row">
                            {{$produto->category_id}}
                        </td>
                        <td scope="row">
                            {{isset($produto->description) ? $produto->description : '-'}}
                        </td>
                        <td scope="row">
                            <a href="{{url("produtos/$produto->id/edit")}}">
                                <button class="btn btn-info btn-sm">Editar</button>
                            </a>
                                <form action="/produtos/{{$produto->id}}/delete" method="POST">
                                    {!! csrf_field() !!}
                                    {{ method_field('DELETE') }}
                                    <button type="submit"class="btn btn-danger btn-sm">Deletar</button>
                                </form>
                            </form>
                        </td>
                    </tr>
                    </tbody>
                @empty
            </table>
                Não encontramos registros.
            @endforelse
    </div>
</div>
@stop
       

