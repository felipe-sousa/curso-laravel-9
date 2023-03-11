@csrf
<input type="text" name="name" placeholder="Nome:" value="{{ $user->name ?? old('name') }}"
    class="border-slate-200 placeholder-slate-400 px-4 py-2 align-middle rounded-lg border border-slate-200">
<input type="email" name="email" placeholder="E-mail:" value="{{ $user->email ?? old('email') }}"
    class="border-slate-200 placeholder-slate-400 px-4 py-2 align-middle rounded-lg border border-slate-200">
<input type="password" name="password" placeholder="Senha:"
    class="border-slate-200 placeholder-slate-400 px-4 py-2 align-middle rounded-lg border border-slate-200">
<button type="submit" class="bg-green-500 rounded-lg text-white px-4 py-2 mt-4 ml-2 font-semibold">Enviar</button>
