<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Checkout')]
class Checkout extends Component
{
    #[Rule('required')]
    public string $cep = '';

    #[Rule('required')]
    public string $rua = '';

    #[Rule('required')]
    public string $numero = '';

    public string $complemento = '';

    #[Rule('required')]
    public string $bairro = '';

    #[Rule('required')]
    public string $cidade = '';

    #[Rule('required')]
    public string $uf = '';

    #[Rule('required')]
    public string $payment;

    public function render()
    {
        return view('livewire.checkout');
    }

    public function searchCEP()
    {
        $response = Http::get("viacep.com.br/ws/{$this->cep}/json/")->json();

        if ($response) {
            $this->cep = $response['cep'];
            $this->rua = $response['logradouro'];
            $this->bairro = $response['bairro'];
            $this->cidade = $response['localidade'];
            $this->uf = $response['uf'];
        }
    }

    #[On('save::checkout')]
    public function save()
    {
        $this->validate();

        session()->flush();

        session()->push('finally', [
            'rua' => $this->rua,
            'numero' => $this->numero,
            'bairro' => $this->bairro,
            'cidade' => $this->cidade,
            'uf' => $this->uf,
            'payment' => $this->payment,
        ]);

        return $this->redirect('success', navigate: true);
    }
}
