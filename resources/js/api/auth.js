import axios from 'axios'
import { gql } from '@apollo/client/core'
import apolloClient from '../apollo'

const LOGIN_MUTATION = gql`
  mutation Login($email: String!, $password: String!) {
    login(email: $email, password: $password)
  }
`

export async function login(email, password) {
  return apolloClient.mutate({
    mutation: LOGIN_MUTATION,
    variables: { email, password },
  })
}
