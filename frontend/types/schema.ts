/**
 * Schema-driven TypeScript types for database entities
 *
 * These types are designed to work with any database schema that follows
 * the expected patterns (main table + navigation tables).
 */

/**
 * Basic database entity interface
 */
export interface DatabaseEntity {
    id: number;
    name: string;
    [key: string]: unknown;
}

/**
 * Navigation entity configuration from backend schema discovery
 */
export interface NavigationTableInfo {
    tableName: string;
    primaryKey: string;
    nameColumn: string;
    columnName: string; // The foreign key column in the main table
    displayOrder: number;
}

/**
 * Main table schema information
 */
export interface MainTableSchema {
    tableName: string;
    primaryKey: string;
    nameColumn: string;
    columns: string[];
}

/**
 * Runtime configuration from schema discovery
 */
export interface RuntimeSchemaConfig {
    mainTableSchema: MainTableSchema;
    navigationTables: Record<string, NavigationTableInfo>;
    navigationOrder: string[];
    navigation: Record<string, NavigationConfig>;
    appTitle: string;
    searchPlaceholder: string;
}

/**
 * Schema information response from backend
 */
export interface SchemaInfo {
    tables: string[];
    main_table: string;
    foreign_keys: string[];
    navigation_config?: {
        order: string[];
        menu: Record<
            string,
            {
                columnName: string;
                orderIndex: number;
            }
        >;
    };
}

/**
 * UI configuration for navigation items
 */
export interface NavigationConfig {
    label: string;
    clearLabel: string;
    badgeColor: "primary" | "success" | "warning" | "info" | "neutral";
    columnName: string;
}

/**
 * Dropdown item for navigation selectors
 */
export interface DropdownItem {
    id: number;
    name: string;
}

/**
 * Generic API response for dropdown items
 */
export interface DropdownResponse {
    data: DropdownItem[];
}

/**
 * Generic search filters
 */
export interface SearchFilters {
    [key: string]: string;
}

/**
 * Generic search request
 */
export interface SearchRequest {
    filters: SearchFilters;
    search: string;
    page: number;
    limit: number;
}

/**
 * Generic search response
 */
export interface SearchResponse<T = unknown> {
    total: number;
    items: T[];
}

/**
 * Dataset entity (can be extended for other main entities)
 */
export interface Dataset extends DatabaseEntity {
    dataset_id: number;
    name: string;
    description?: string;
    created_at?: string;
    updated_at?: string;
    last_edited_at?: string;
    metadata?: Record<string, unknown>;
    // Navigation entity names (populated by joins)
    stage_name?: string;
    accelerator_name?: string;
    campaign_name?: string;
    detector_name?: string;
    [key: string]: unknown;
}

/**
 * Navigation state for route handling
 */
export interface NavigationState {
    [key: string]: string | null;
}

/**
 * Path building utilities return type
 */
export interface PathInfo {
    path: string;
    filters: SearchFilters;
    title: string;
    description: string;
}

/**
 * Validation response from backend
 */
export interface ValidationResponse {
    valid: boolean;
    errors: string[];
}

/**
 * Import/export operation response
 */
export interface ImportResponse {
    status: "success" | "error";
    message: string;
    processed?: number;
    errors?: string[];
}

/**
 * Table metadata for admin operations
 */
export interface TableMetadata {
    tableName: string;
    columns: TableColumn[];
    primaryKey: string;
    foreignKeys: ForeignKey[];
}

export interface TableColumn {
    columnName: string;
    dataType: string;
    isNullable: boolean;
    defaultValue?: string;
    isAutoIncrement?: boolean;
}

export interface ForeignKey {
    columnName: string;
    referencedTable: string;
    referencedColumn: string;
}

/**
 * Configuration override types for app.config.ts
 */
export interface AppConfigOverrides {
    navigation?: {
        [entityKey: string]: Partial<NavigationConfig>;
    };
    mainTable?: {
        nameColumn?: string;
        searchColumns?: string[];
    };
    ui?: {
        pageSize?: number;
        timeout?: number;
        retryAttempts?: number;
    };
    branding?: {
        title?: string;
        description?: string;
        searchPlaceholder?: string;
    };
}

/**
 * Complete app configuration
 */
export interface AppConfig {
    api: {
        baseUrl: string;
        timeout: number;
        retryAttempts: number;
    };
    search: {
        defaultPageSize: number;
        maxPageSize: number;
        debounceMs: number;
    };
    navigation: {
        enableBreadcrumbs: boolean;
        enableClearAll: boolean;
    };
    overrides: AppConfigOverrides;
}
