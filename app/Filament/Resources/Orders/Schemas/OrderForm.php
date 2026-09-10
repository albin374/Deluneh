<?php

namespace App\Filament\Resources\Orders\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class OrderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('user_id')
                    ->numeric(),
                TextInput::make('session_id'),
                TextInput::make('total_amount')
                    ->required()
                    ->numeric(),
                \Filament\Forms\Components\Select::make('status')
                    ->required()
                    ->options([
                        'Pending' => 'Pending',
                        'Processing' => 'Processing',
                        'Shipped' => 'Shipped',
                        'Not Delivered' => 'Not Delivered',
                        'Out for Delivery' => 'Out for Delivery',
                        'Delivered' => 'Delivered',
                        'Cancelled' => 'Cancelled',
                        'Delivered in 7 days' => 'Delivered in 7 days',
                    ])
                    ->default('Pending'),
                TextInput::make('payment_method'),
                TextInput::make('shipping_name'),
                TextInput::make('shipping_phone'),
                TextInput::make('shipping_pincode'),
                Textarea::make('shipping_address')
                    ->columnSpanFull(),
            ]);
    }
}
