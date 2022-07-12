<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function create(Request $request)
    {
        //dd($request->all());
        //return ('rota funcionando!');
        $new_post = [
            'title' =>      'Meu primeiro post',
            'content' =>    'Conteudo qualquer',
            'author' =>     'Wellington'
        ];
        // Eloquent - Forma convencional de criar um registro no banco
        // Funcional no Laravel 8
        // $post = new Post($new_post); // forma de criar o post
        // $post->save();
        // dd($post);

        // Funcional no laravel 8
        $post = new Post();
        $post->title = 'Postagem de hoje';
        $post->content = 'Conteúdo qualquer';
        $post->author = 'Desconhecido';
        $post->save();

        dd($post);
    }

    public function read(Request $rPost)
    {
        $post = new Post();
        $post = $post->find(2);
        dd($post);
    }

    public function all(Request $r)
    {
        $posts = Post::all();

        return $posts;
    }

    public function update(Request $request)
    {
        // Alterando apenas 1 registro
        // $post = Post::find(1);
        // $post->title = 'Meu primeiro post atualizado';
        // $post->save();
        // return $post;

        $posts = Post::where('content','=','conteudo qualquer')
            ->update([
                'title'     =>  'Código Limpo',
                'content'   =>  'Mesmo um código ruim pode funcionar. Mas se ele não for limpo, pode acabar com uma empresa de desenvolvimento. Perdem-se a cada ano horas incontáveis e recursos importantes devido a um código mal escrito. Mas não precisa ser assim.O renomado especialista em software, Robert C. Martin, apresenta um paradigma revolucionário com Código limpo: Habilidades Práticas do Agile Software. Martin se reuniu com seus colegas do Mentor Object para destilar suas melhores e mais ágeis práticas de limpar códigos “dinamicamente” em um livro que introduzirá gradualmente dentro de você os valores da habilidade de um profissional de softwares e lhe tornar um programador melhor –mas só se você praticar.Que tipo de trabalho você fará? Você lerá códigos aqui, muitos códigos. E você deverá descobrir o que está correto e errado nos códigos. E, o mais importante, você terá de reavaliar seus valores profissionais e seu comprometimento com o seu ofício.Código limpo está divido em três partes. Na primeira há diversos capítulos que descrevem os princípios, padrões e práticas para criar um código limpo.A segunda parte consiste em diversos casos de estudo de complexidade cada vez maior. Cada um é um exercício para limpar um código – transformar o código base que possui alguns problemas em um melhor e eficiente. A terceira parte é a compensação: um único capítulo com uma lista de heurísticas e “odores” reunidos durante a criação dos estudos de caso. O resultado será um conhecimento base que descreve a forma como pensamos quando criamos, lemos e limpamos um código.Após ler este livro os leitores saberão:✔ Como distinguir um código bom de um ruim✔ Como escrever códigos bons e como transformar um ruim em um bom✔ Como criar bons nomes, boas funções, bons objetos e boas classes✔ Como formatar o código para ter uma legibilidade máxima✔ Como implementar completamente o tratamento de erro sem obscurecer a lógica✔ Como aplicar testes de unidade e praticar o desenvolvimento dirigido a testesEste livro é essencial para qualquer desenvolvedor, engenheiro de software, gerente de projeto, líder de equipes ou analistas de sistemas com interesse em construir códigos melhores.',
                'author'    =>  'Robert C. Marvin'
            ]);

            return $posts;
    }

    public function delete(Request $request)
    {
        $post = Post::find(7);

        if($post){
            $post->delete();
            return 'Registro deletado com Sucesso!';
        } else {
            return 'Erro ao tentar deletar o registro!';
        }
        // // Deletar vários registros - exemplo:
        // $post = Post::where('id','>',0)->delete();
        // return $post;

    }
}
