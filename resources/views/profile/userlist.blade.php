<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('ユーザ管理') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                @component('components.frame', ['title' => 'ユーザ一覧'])
                    <table class="table table-striped bg-white w-full">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>ユーザ名</th>
                                <th>メールアドレス</th>
                                <th class="w-1/12"></th>
                                <th class="w-1/12"></th>
                            </tr>
                        </thead>
                        <tbody class="border-gray-400">
                            @foreach ($users as $user)
                            <tr>
                                <td class="text-center">{{$user->id}}</td>
                                <td class="border-gray-200 border-t-2">{{$user->name}}</td>
                                <td class="border-gray-200 border-t-2">{{$user->email}}</td>
                                <td>
                                @include('components.button',[
                                    'type' => 'green',
                                    'name' => '編集',
                                    'route' => 'profile.edit'
                                ])
                                </td>
                                <td>
                                @include('components.button',[
                                    'type' => 'red',
                                    'name' => '削除',
                                    'route' => 'profile.edit'
                                ])
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @slot('xxx')
                        @component('components.button',[
                            'type' => 'gray',
                            'route' => 'create_new_user_by_admin'
                        ])
                            @slot('name')
                                <i class="fa-solid fa-plus"></i>
                            @endslot
                        @endcomponent
                    @endslot
                @endcomponent
            </div>
        </div>
    </div>
</x-app-layout>
