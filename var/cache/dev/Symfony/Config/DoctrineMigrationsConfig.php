<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'DoctrineMigrations'.\DIRECTORY_SEPARATOR.'StorageConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class DoctrineMigrationsConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $migrationsPaths;
    private $services;
    private $factories;
    private $storage;
    private $migrations;
    private $connection;
    private $em;
    private $allOrNothing;
    private $checkDatabasePlatform;
    private $customTemplate;
    private $organizeMigrations;
    private $enableProfiler;
    private $transactional;
    
    /**
     * @return $this
     */
    public function migrationsPath(string $namespace, mixed $value): static
    {
        $this->migrationsPaths[$namespace] = $value;
    
        return $this;
    }
    
    /**
     * @return $this
     */
    public function services(string $service, mixed $value): static
    {
        $this->services[$service] = $value;
    
        return $this;
    }
    
    /**
     * @return $this
     */
    public function factories(string $factory, mixed $value): static
    {
        $this->factories[$factory] = $value;
    
        return $this;
    }
    
    public function storage(array $value = []): \Symfony\Config\DoctrineMigrations\StorageConfig
    {
        if (null === $this->storage) {
            $this->storage = new \Symfony\Config\DoctrineMigrations\StorageConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "storage()" has already been initialized. You cannot pass values the second time you call storage().');
        }
    
        return $this->storage;
    }
    
    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function migrations(ParamConfigurator|array $value): static
    {
        $this->migrations = $value;
    
        return $this;
    }
    
    /**
     * Connection name to use for the migrations database.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function connection($value): static
    {
        $this->connection = $value;
    
        return $this;
    }
    
    /**
     * Entity manager name to use for the migrations database (available when doctrine/orm is installed).
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function em($value): static
    {
        $this->em = $value;
    
        return $this;
    }
    
    /**
     * Run all migrations in a transaction.
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function allOrNothing($value): static
    {
        $this->allOrNothing = $value;
    
        return $this;
    }
    
    /**
     * Adds an extra check in the generated migrations to allow execution only on the same platform as they were initially generated on.
     * @default true
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function checkDatabasePlatform($value): static
    {
        $this->checkDatabasePlatform = $value;
    
        return $this;
    }
    
    /**
     * Custom template path for generated migration classes.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function customTemplate($value): static
    {
        $this->customTemplate = $value;
    
        return $this;
    }
    
    /**
     * Organize migrations mode. Possible values are: "BY_YEAR", "BY_YEAR_AND_MONTH", false
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function organizeMigrations($value): static
    {
        $this->organizeMigrations = $value;
    
        return $this;
    }
    
    /**
     * Use profiler to calculate and visualize migration status.
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableProfiler($value): static
    {
        $this->enableProfiler = $value;
    
        return $this;
    }
    
    /**
     * Whether or not to wrap migrations in a single transaction.
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function transactional($value): static
    {
        $this->transactional = $value;
    
        return $this;
    }
    
    public function getExtensionAlias(): string
    {
        return 'doctrine_migrations';
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['migrations_paths'])) {
            $this->migrationsPaths = $value['migrations_paths'];
            unset($value['migrations_paths']);
        }
    
        if (isset($value['services'])) {
            $this->services = $value['services'];
            unset($value['services']);
        }
    
        if (isset($value['factories'])) {
            $this->factories = $value['factories'];
            unset($value['factories']);
        }
    
        if (isset($value['storage'])) {
            $this->storage = new \Symfony\Config\DoctrineMigrations\StorageConfig($value['storage']);
            unset($value['storage']);
        }
    
        if (isset($value['migrations'])) {
            $this->migrations = $value['migrations'];
            unset($value['migrations']);
        }
    
        if (isset($value['connection'])) {
            $this->connection = $value['connection'];
            unset($value['connection']);
        }
    
        if (isset($value['em'])) {
            $this->em = $value['em'];
            unset($value['em']);
        }
    
        if (isset($value['all_or_nothing'])) {
            $this->allOrNothing = $value['all_or_nothing'];
            unset($value['all_or_nothing']);
        }
    
        if (isset($value['check_database_platform'])) {
            $this->checkDatabasePlatform = $value['check_database_platform'];
            unset($value['check_database_platform']);
        }
    
        if (isset($value['custom_template'])) {
            $this->customTemplate = $value['custom_template'];
            unset($value['custom_template']);
        }
    
        if (isset($value['organize_migrations'])) {
            $this->organizeMigrations = $value['organize_migrations'];
            unset($value['organize_migrations']);
        }
    
        if (isset($value['enable_profiler'])) {
            $this->enableProfiler = $value['enable_profiler'];
            unset($value['enable_profiler']);
        }
    
        if (isset($value['transactional'])) {
            $this->transactional = $value['transactional'];
            unset($value['transactional']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->migrationsPaths) {
            $output['migrations_paths'] = $this->migrationsPaths;
        }
        if (null !== $this->services) {
            $output['services'] = $this->services;
        }
        if (null !== $this->factories) {
            $output['factories'] = $this->factories;
        }
        if (null !== $this->storage) {
            $output['storage'] = $this->storage->toArray();
        }
        if (null !== $this->migrations) {
            $output['migrations'] = $this->migrations;
        }
        if (null !== $this->connection) {
            $output['connection'] = $this->connection;
        }
        if (null !== $this->em) {
            $output['em'] = $this->em;
        }
        if (null !== $this->allOrNothing) {
            $output['all_or_nothing'] = $this->allOrNothing;
        }
        if (null !== $this->checkDatabasePlatform) {
            $output['check_database_platform'] = $this->checkDatabasePlatform;
        }
        if (null !== $this->customTemplate) {
            $output['custom_template'] = $this->customTemplate;
        }
        if (null !== $this->organizeMigrations) {
            $output['organize_migrations'] = $this->organizeMigrations;
        }
        if (null !== $this->enableProfiler) {
            $output['enable_profiler'] = $this->enableProfiler;
        }
        if (null !== $this->transactional) {
            $output['transactional'] = $this->transactional;
        }
    
        return $output;
    }

}
