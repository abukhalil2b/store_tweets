<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class UsersExport implements FromCollection, ShouldAutoSize, WithMapping, WithHeadings {
	use Exportable;
	/**
	 * @return \Illuminate\Support\Collection
	 */
	public function collection() {
		return User::all();
	}

	public function map($user): array
	{
		return [
			$user->id,
			$user->created_at->format('Y-m-d'),
			Date::dateTimeToExcel($invoice->created_at),
		];
	}

	public function headings(): array
	{
		return [
			'#',
			'التاريخ',
		];
	}
}
