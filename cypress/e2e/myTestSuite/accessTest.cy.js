describe('Check Access Rights', () => {
  beforeEach(() => {
    cy.visit('http://d95site2.localhost/user/login')
    cy.get('.user-login-form')
      .find('div').first()
      .find('input')
      .type('gymadmin1').should('have.value', 'gymadmin1')
    cy.get('.user-login-form')
      .find('div').first().next()
      .find('input')
      .type('gymadmin1').should('have.value', 'gymadmin1')
    cy.get('.user-login-form')
      .submit()
    cy.get('.page-title')
      .should('contain', 'gymadmin1')
  })

  it('Access Fail - Admin Reports', () => {
    cy.visit(
      {
        url: 'http://d95site2.localhost/admin/reports',
        failOnStatusCode: false
      })
    cy.get('.page-title')
      .should('contain', 'Access denied')
  })

  it('Access Success - Admin Content', () => {
    cy.visit(
      {
        url: 'http://d95site2.localhost/admin/content',
        failOnStatusCode: false
      })
    cy.get('.page-title')
      .should('contain', 'Content')
    cy.get('.action-links-item')
      .children()
      .should('have.attr', 'href', '/node/add')
      .and('contain', 'Add content')
  })
})

describe('Check Site Login', () => {
  beforeEach(() => {
    cy.visit('http://d95site2.localhost/')
    // cy.get('.dropdown-menu').contains('Navigation').click()
  })

  it('Verify ClimbSG Username Label', () => {
    cy.get('.menu').contains('Log in').click()
    cy.get('.user-login-form')
      .find('div')
      .find('div')
      .contains('Enter your ClimbSG username.')
  })
})
