@inject('posts','App\Post')

<h4>Les derniers articles</h4>
<!-- @foreach($posts->dernier()->get() as $post)
    <a href=" {{ route('blog.posts.show',$post->titre) }} "><li> {{ $post->titre }} </li></a>
@endforeach -->
<p>Le contenu sera ajouté périodiquement et il fera tout le balisage au fil du temps</p>