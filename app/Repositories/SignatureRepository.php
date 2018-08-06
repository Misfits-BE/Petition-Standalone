<?php 

namespace App\Repositories;

use App\Models\Signature;
use ActivismeBE\DatabaseLayering\Repositories\Contracts\RepositoryInterface;
use ActivismeBE\DatabaseLayering\Repositories\Eloquent\Repository;

/**
 * Class SignatureRepository
 *
 * @package App\Repositories
 */
class SignatureRepository extends Repository
{
    /**
     * Set the eloquent model class for the repository.
     *
     * @return string
     */
    public function model(): string
    {
        return Signature::class;
    }

    /**
     * Get and calculate all the needed information for the counter on the welcome page.
     * 
     * @return array
     */
    public function getCounterInformation(): array 
    {
        $signatureCount = $this->model->count();
        $total = config('platform.signatures-needed');

        return [
            'total'      => $total,
            'signatures' => $signatureCount,
            'remain'     => ($total - $signatureCount),
            'percent'    => ($signatureCount / $total) * 100
        ];
    }
}