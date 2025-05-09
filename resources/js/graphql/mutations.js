import gql from 'graphql-tag'

export const CREATE_ARTICLE = gql`
  mutation($input: CreateArticleInput!) {
    createArticle(input: $input) {
      id title slug
    }
  }
`