<?php

declare(strict_types=1);

namespace App\Orchid;

use Orchid\Platform\Dashboard;
use Orchid\Platform\ItemPermission;
use Orchid\Platform\OrchidServiceProvider;
use Orchid\Screen\Actions\Menu;
use Orchid\Support\Color;

class PlatformProvider extends OrchidServiceProvider
{
    /**
     * @param Dashboard $dashboard
     */
    public function boot(Dashboard $dashboard): void
    {
        parent::boot($dashboard);

        // ...
    }

    /**
     * @return Menu[]
     */
    public function registerMainMenu(): array
    {
        return [
            // Menu::make('Example screen')
            //     ->icon('monitor')
            //     ->route('platform.example')
            //     ->title('Navigation')
            //     ->badge(fn () => 6),
            // Menu::make('Evaluation')
            //     ->title('DCM')
            //     ->icon('eye')
            //     ->route("platform.dcm.evaluation")
            //     ->divider(),

            Menu::make('Evaluation DCM')
                ->title('DCM')
                ->icon('graph')
                ->list([
                    Menu::make('Infrastructure')
                    ->icon('vector')
                    ->route('platform.dcm.evaluation'),
                    Menu::make('Revenu Infra')
                    ->icon('money')
                    ->route('platform.perfo.distribution'),
                ])
                ->divider(),

            // Menu::make('Monitoring')
            //     ->title('Base')
            //     ->icon('eye')
            //     ->route('platform.monitoring'),
            // Menu::make('FirstCall Quality')
            //     ->icon('call-out')
            //     ->route('platform.first.call.quality')
            //     ->divider(),

            // Menu::make('Performances')
            //     ->title('energy')
            //     ->icon('energy')
            //     ->list([
            //         Menu::make('Perfo 1')
            //         ->icon('vector')
            //         ->route('platform.perfo.distribution'),
            //         Menu::make('Perfo 2')
            //         ->icon('dropbox')
            //         ->route('platform.perfo.infra'),
            //     ])
            //     ->divider(),

            // Menu::make('Canal de Ventes')
            //     ->title('Revenu')
            //     ->icon('money')
            //     ->route('platform.canal.ventes'),
            // Menu::make('Dealer Purchase')
            //     ->icon('basket-loaded')
            //     ->route('platform.dealer.purchase'),
            // Menu::make('Basic Elements')
            //     ->title('Form controls')
            //     ->icon('note')
            //     ->route('platform.example.fields'),

            // Menu::make('Advanced Elements')
            //     ->icon('briefcase')
            //     ->route('platform.example.advanced'),

            // Menu::make('Text Editors')
            //     ->icon('list')
            //     ->route('platform.example.editors'),

            // Menu::make('Overview layouts')
            //     ->title('Layouts')
            //     ->icon('layers')
            //     ->route('platform.example.layouts'),

            // Menu::make('Chart tools')
            //     ->icon('bar-chart')
            //     ->route('platform.example.charts'),

            // Menu::make('Cards')
            //     ->icon('grid')
            //     ->route('platform.example.cards')
            //     ->divider(),

            // Menu::make('Documentation')
            //     ->title('Docs')
            //     ->icon('docs')
            //     ->url('https://orchid.software/en/docs'),

            // Menu::make('Changelog')
            //     ->icon('shuffle')
            //     ->url('https://github.com/orchidsoftware/platform/blob/master/CHANGELOG.md')
            //     ->target('_blank')
            //     ->badge(fn () => Dashboard::version(), Color::DARK()),

            Menu::make(__('Users'))
                ->icon('user')
                ->route('platform.systems.users')
                ->permission('platform.systems.users')
                ->title(__('Access rights')),

            Menu::make(__('Roles'))
                ->icon('lock')
                ->route('platform.systems.roles')
                ->permission('platform.systems.roles'),
        ];
    }

    /**
     * @return Menu[]
     */
    public function registerProfileMenu(): array
    {
        return [
            Menu::make(__('Profile'))
                ->route('platform.profile')
                ->icon('user'),
        ];
    }

    /**
     * @return ItemPermission[]
     */
    public function registerPermissions(): array
    {
        return [
            ItemPermission::group(__('System'))
                ->addPermission('platform.systems.roles', __('Roles'))
                ->addPermission('platform.systems.users', __('Users'))
                ->addPermission('platform.systems.dir', __('dir'))
                ->addPermission('platform.systems.bandundu', __('Bandundu'))
                ->addPermission('platform.systems.funa', __('Funa'))
                ->addPermission('platform.systems.kikwit', __('Kikwit'))
                ->addPermission('platform.systems.lukunga', __('Lukunga'))
                ->addPermission('platform.systems.mont amba', __('Mont amba'))
                ->addPermission('platform.systems.tshangu', __('Tshangu')),
        ];
    }
}
