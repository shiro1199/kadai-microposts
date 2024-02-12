@if (Auth::user()->register_favorite($micropost->id))
    {{-- お気に入りを外すボタンのフォーム --}}
    <form method="POST" action="{{ route('user.unfavorite', $micropost->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-secondary btn-block normal-case" 
            onclick="return confirm('id = {{ $micropost->id }} のお気に入りを外します。よろしいですか？')">Unfavorite</button>
            
    </form>
@else
    {{-- お気に入りボタンのフォーム --}}
    <form method="POST" action="{{ route('user.favorite', $micropost->id) }}">
        @csrf
        <button type="submit" class="btn btn-outline btn-block normal-case">Favorite</button>
    </form>
@endif