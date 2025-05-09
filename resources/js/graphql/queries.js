import gql from 'graphql-tag'

export const GET_ARTICLES = gql`query { articles { id title slug } }`
export const GET_PRODUCTS = gql`query { products { id name price in_stock } }`
